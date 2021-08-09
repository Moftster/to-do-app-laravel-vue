<template>
    <div class="w-1/2 bg-white rounded-lg shadow-lg mx-auto p-4">

        <h1 class="text-2xl text-gray-700 text-center mb-4">
            My To Dos 
        </h1>

        <AddTask />
        
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, expedita? Officiis autem, omnis hic similique facere tempora culpa animi quisquam commodi illum sapiente error fugiat? Nobis, architecto? Sapiente, laborum sint!
        </p>
    </div>
    <div class="grid grid-cols-7 gap-1">
        <div>
            <h2>From DB</h2>
            <DayTasks />
        </div>
        <div>
            <p>{{daysOfTheWeek()}}</p>
            <h1 class="font-mono text-4xl">To Do Items</h1>
                <div v-for="todo in todos" v-bind:key="todo.id">
                    <h1 class="font-mono text-2xl" >
                        {{todo.description}}
                    </h1>
                    <h3 class="font-mono text-xl">
                        Due: {{todo.due_date}}
                    </h3>
                </div>
        </div>
    </div>
</template>

<script>
import AddTask from '../components/AddTask'
import DayTasks from '../components/DayTasks'

export default {
    components: {
        AddTask,
        DayTasks
    },
    methods: {
        daysOfTheWeek() {
            let daysOfTheWeek = [];
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const dayNames = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            const current = new Date();
            const date = `${dayNames[current.getDay()]} ${current.getDay()} ${monthNames[current.getMonth()]} ${current.getFullYear()}`;
            return date;
        }
    }
}
</script>