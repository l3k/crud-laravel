<template>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" v-bind:href="url">
                    {{ titulo }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <slot></slot>
                    </ul>
                </div>
            </div>
        </nav>

</template>

<script>
    export default {
      props:['titulo','url']

    }
</script>

<style>
.navbar-laravel {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}
@media (min-width: 768px){
.navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
}
}
.navbar, .navbar>.container, .navbar>.container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbar {
    position: relative;
    padding: .5rem 1rem;
}



</style>

