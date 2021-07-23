<template>
    <div>
        <Task />
    </div>
</template>

<script>
import Task from './Task'

export default {
    name: 'DayTasks',
    props: {
        tasks: Array
    },
    components: {
        Task
    },
}
</script>