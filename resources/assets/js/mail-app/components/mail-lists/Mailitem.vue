<template>
    <li class="menu-item">
        <div class="tile tile-centered">
            <div class="tile-content">
                <div class="tile-title">spectre-docs.pdf {{ no }}</div>
                <small class="tile-subtitle">14MB · Public · 1 Jan, 2017</small>
            </div>
            <div class="tile-action">
                <button class="btn btn-link">
                <i class="icon icon-more-vert"></i>
                </button>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: ['no']
}
</script>
