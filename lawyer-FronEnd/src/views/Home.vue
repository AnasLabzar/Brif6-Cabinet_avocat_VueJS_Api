<template>
  <div class="home">
    <div class="line">
      <p class="slogan">
        Where you find the best <span class="goldenText">law professionals</span>
      </p>
      <div class="line1"></div>
    </div>

    <button @click="toggleModal" class="bookingButton">
      Book Now<sup>+</sup>
    </button>

    <transition name="modalTransition">
      <div v-if="isModalShown">
        <Modal @hide="toggleModal" />
      </div>
    </transition>
  </div>
</template>

<script>
  import Modal from "../components/Modal.vue";
  export default {
    name: "Home",
    data() {
      return {
        isModalShown: false,
      };
    },
    components: {
      Modal,
    },
    methods: {
      toggleModal() {
        this.isModalShown = !this.isModalShown;
      },
    },
  };
</script>

<style>
  .modalTransition-enter-from {
    opacity: 0;
  }
  .modalTransition-enter-to {
    opacity: 1;
  }

  .modalTransition-enter-active,
  .modalTransition-leave-active {
    transition: opacity 0.6s ease;
  }

  .modalTransition-leave-to {
    opacity: 0;
  }

  .homeText {
    font-family: poppins;
    color: black;
    font-size: 20px;
    font-weight: 100;
    width: 90%;
    margin: auto;
    padding: auto;
  }

  .slogan {
    font-family: poppins;
    color: black;
    font-size: 40px;
    font-weight: 100;
    padding-top: 50px;
  }

  .goldenText {
    color: #d5b699;
  }

  .bookingButton {
    position: relative;
    top: 450px;
    width: 150px;
    height: 55px;
    margin-top: 70px;
    border: none;
    color: white;
    background: #d5b699;
    font-size: 18px;
    font-family: poppins;
    font-weight: 300;
    border-radius: 15px;
  }

  .line {
    width: 600px;
    height: 2px;
    background-color: #d5b699;
    margin: 0 auto;
  }

  .line1 {
    width: 600px;
    height: 2px;
    background-color: #d5b699;
  }
</style>