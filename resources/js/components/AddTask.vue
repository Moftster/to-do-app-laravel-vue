<template>
<div class="bg-red-500 shadow rounded">
    <form @submit="onSubmit" class="">
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
    components: {
        Datepicker
    }
}
</script>