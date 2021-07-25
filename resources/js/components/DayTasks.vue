<template>
    <div>
        <h1 class="font-mono text-4xl">To Do Items</h1>
        <div v-for="todo in todos" :key="todo.id">
            <h1 class="font-mono text-2xl" >
                {{todo.description}}
            </h1>
            <h3 class="font-mono text-xl">
                Due: {{todo.due_date}}
            </h3>
        </div>
    </div>
</template>

<script>
import Task from './Task'

export default {
    name: 'DayTasks',
    data: function() {
        return {
            todos: [],
        }
    },
    mounted() {
        this.loadTodos();
    },
    methods: {
        loadTodos: function() {
            axios.get('/api/todos')
                .then((response)=>{
                    this.todos = response.data;
            })
                .catch(function(error){
                    console.log(error);
            });
        }
    },
    props: {
        tasks: Array
    },
    components: {
        Task
    },
}
</script>