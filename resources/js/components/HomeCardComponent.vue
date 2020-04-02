<template>
    <div class="card shadow-lg rounded" style="width: 18rem;">
        <img :src="image" alt="" class="card-img-top">
        <div class="card-body">
            <div class="card-title">
                {{ title }}
            </div>
            <div class="card-text">
                {{ body }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['image', 'title', 'body']
}
</script>

<style lang="scss" scoped>
    $fontSize: 1.5em;

    .card-img-top {
        padding: .5em .5em .5em .5em;
        border-radius: .5em;
    }
    .card-title {
        font-size: $fontSize;
    }
</style>