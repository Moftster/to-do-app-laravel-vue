<template>
<div class="bg-red-500 shadow rounded">
    <form class="" @submit.prevent="onSubmit">
        <div class="">
            <label>Task</label>
            <input type="text" v-model="text" name="text" placeholder="Add Task" />
        </div>
        <div class="flex">
        <label>Due Date</label>
            <Datepicker 
                v-model="date"
                name="date"
                inputFormat="d MMM yyy"
            />
        </div>
        <input type="submit" value="Add Task" class="" />
    </form> 
</div>
</template>

<script>
import Datepicker from './DatePicker'

export default {
    name: 'AddTask',
    data() {
        return {
            text: '',
            date: new Date(),
     }
    },
    methods: {
        onSubmit() {
            if(!this.text){
                alert('Please add a task')
                return
            }

            this.date.setTime(this.date.getTime() + (5*60*60*1000));

            axios.post('./api/addtodo', {
                text: this.text,
                date: this.date,
            })
                .then(response => {
                    
                    const newTask = {
                        description: this.text,
                        due_date: `${JSON.stringify(this.date).substring(1, 11)}`
                    }

                    this.$emit('add-task', newTask);

                    this.text = '';
                    this.date = new Date();
                })
                .catch(function(error){
                    console.log(error);
            });
        },
    },
    components: {
        Datepicker
    }
}
</script>