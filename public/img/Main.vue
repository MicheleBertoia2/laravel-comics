
<script>
import comics from "../data/dc-comics"
import Card from "./partials/Card.vue"
export default {
  components:{
    Card
  },
  data(){
    return{
      comics,
    }
  }
}
</script>

<template>
  <section>

    <div class="jumbo">
      <img src="../assets/img/jumbotron.jpg" alt="dc heroes">
    </div>

    <div class="content">

      <div class="container">

        <div class="label">
          <span>current series</span>
        </div>

        <div class="cards-container">

          <Card v-for="(comic, index) in comics" :key="index"
            :imgTitle="comic.series"
            :imgUrl="comic.thumb"
          />

        </div>

      </div>

      <div class="load-more">
        <button>LOAD MORE</button>
      </div>

    </div>

  </section>
</template>

<style lang="scss" scoped>
  @use '../scss/general' as *;
  @use '../scss/utils' as *;
  @use '../scss/vars' as *;
  @use '../scss/mixin' as *;

  section{
    .jumbo{
      height: 300px;
      overflow: hidden;
    }

    .container{
      position: relative;
      top: -25px;
    }

    .content{
      background-color: $color-black;

      .label{
        height: 50px;
        width: 180px;
        background-color: $color-blue;
        text-align: center;
        span{
          text-transform: uppercase;
          color: white;
          line-height: 50px;
          font-size: 16px;
          font-weight: 700;
        }
      }

      .cards-container{        
        display: flex;
        flex-wrap: wrap;
        padding: 10px 0;
        
      }

      .load-more{
        @include centerFlex;
        padding-bottom: 20px;
        button{
          border: none;
          color: $color-white;
          background-color: $color-blue;
          font-weight: 700;
          padding: 10px 50px;
        }
      }
    }
  }
</style>