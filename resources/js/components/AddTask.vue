<template>
<div class="bg-red-500 shadow rounded">
    <form class="" @submit.prevent="onSubmit">
        <div class="">
            <label>Task</label>
            <input type="text" v-model="text" name="text" placeholder="Add Task" />
        </div>
        <div class="flex">
        <label>Due Date</label>
            <!-- <input
                type="text"
                v-model="day"
                name="day"
                placeholder="Add Date & Time"
            /> -->
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
            // date: Date,
     }
    },
    methods: {
        onSubmit() {
            console.log('somethign happening');
            if(!this.text){
                alert('Please add a task')
                return
            }

            axios.post('./api/addtodo', {
                text: this.text,
                date: this.date
            })
                .then(response => {
                    this.text = '';
                })
                .catch(function(error){
                    console.log(error);
            });
            console.log('submit function working');
        },
    },
    components: {
        Datepicker
    }
}
</script>