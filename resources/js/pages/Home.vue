<template>
    <div class="w-1/2 bg-white rounded-lg shadow-lg mx-auto p-4">

        <h1 class="text-2xl text-gray-700 text-center mb-4">
            My To Dos 
        </h1>

        <AddTask @add-task="newTask"/>
        
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, expedita? Officiis autem, omnis hic similique facere tempora culpa animi quisquam commodi illum sapiente error fugiat? Nobis, architecto? Sapiente, laborum sint!
        </p>
    </div>
    
    <div class="grid grid-cols-7 gap-1">
        <div class="items-center" v-for="weekDay in weekDays" :key="weekDay.getUTCDate()">
            <div class="text-center">
                <h1 class="font-mono text-2xl pt-3">
                    {{dayNames[weekDay.getDay()]}} 
                </h1>

                <h1 class="font-mono text-2xl pb-3">
                    {{weekDay.getDate()}} {{monthNames[weekDay.getMonth()]}}
                </h1>
            </div>

            <div v-for="todo in dailyTodos" v-bind:key="todo.id">
                <div v-if="todo.due_date == JSON.stringify(weekDay).substring(1, 11)" class="border-2 border-black mb-2">
                    <div class="p-2 flex justify-between items-center">
                        <div class="flex items-center">
                            <p class="font-mono" >
                                {{todo.description}}
                            </p>
                        </div>
                        <div class="inline-block">
                            <i @click="completeTask()" class="far fa-check-square p-1"></i>

                            <i @click="deleteTask()" class="far fa-trash-alt p-1"></i>
                        </div>
                    </div>
                </div>
                <!-- <div v-else>
                    <p>test</p>
                    <p>You have nothing to do this {{dayNames[weekDay.getDay()]}}. Add some tasks slacker!
                </div> -->
            </div>
        </div>
    </div>
   

</template>

<script>
import AddTask from '../components/AddTask'

export default {
    components: {
        AddTask
    },
    data: function() {
        return {
            weekDays: [],
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dailyTodos: [],
        }
    },
    methods: {
            daysOfTheWeek() {
                let nextSevenDays = [];
                for (let i = 0; i < 7; i++) {
                    let currentDay = new Date();
                    nextSevenDays.push(currentDay);
                    currentDay.setDate(currentDay.getDate()+i);
                }
                this.weekDays = nextSevenDays;
            }, 
            loadDailyTodos() {
                axios.get('/api/todos')
                    .then((response)=>{
                        this.dailyTodos = response.data;
                })
                    .catch(function(error){
                        console.log(error);
                });
            }, 
            newTask(newTask) {
                this.dailyTodos.push(newTask);
            },
            deleteTask() {
                console.log('delete');
            }
        },
    mounted() {
        this.daysOfTheWeek();
        this.loadDailyTodos();
    }
}
</script>