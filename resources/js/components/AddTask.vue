<template>
<div class="bg-red-500 shadow rounded">
    <form @submit="onSubmit" class="">
        <div class="">
            <label>Task</label>
            <input type="text" v-model="text" name="text" placeholder="Add Task" />
        </div>
        <div class="">
        <label>Date & Time</label>
            <input
                type="text"
                v-model="day"
                name="day"
                placeholder="Add Date & Time"
            />
        </div>
        <input type="submit" value="Add Task" class="" />
    </form> 
</div>
</template>

<script>
export default {
    name: 'AddTask'
}
</script>