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
        <div v-for="weekDay in weekDays">
            <h1 class="font-mono text-2xl" >
                {{dayNames[weekDay.getDay()]}}
            </h1>
        </div>
    </div>
   
    <DayTasks />

</template>

<script>
import AddTask from '../components/AddTask'
import DayTasks from '../components/DayTasks'

export default {
    components: {
        AddTask,
        DayTasks
    },
    data: function() {
        return {
            weekDays: [],
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            dayNames: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        }
    },
    methods: {
        daysOfTheWeek() {
            let nextSevenDays = [];
            for (let i = 0; i < 7; i++) {
                let currentDay = new Date();
                currentDay.setDate(currentDay.getDate()-1+i);
                // const date = `${dayNames[currentDay.getDay()]} ${currentDay.getDay()} ${monthNames[currentDay.getMonth()]}`;
                nextSevenDays.push(currentDay);
            }
            this.weekDays = nextSevenDays;
        }
    },
    mounted() {
        this.daysOfTheWeek();
    }
}
</script>