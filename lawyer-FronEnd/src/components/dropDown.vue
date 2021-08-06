<template>
  <div class="dropDown">
    <p class="dropDownText">Your Booking is confirmed !</p>
    <router-link class="toTable" to="/BookingsTable">See Bookings</router-link>
  </div>
</template>

<script>
export default {
  name: "dropDown",
};
</script>

<style scoped>
.dropDown {
  position: fixed;
  width: 30%;
  top: 10px;
  height: 120px;
  left: 35vw;
  border-radius: 5px;
  background-color: #d5b699;
}
.dropDownText {
  color: #2c3e50;
  font-family: poppins;
  font-weight: 300;
  font-size: 18px;
  margin-bottom: 30px;
}

.toTable {
  color: #2c3e50;
  cursor: pointer;
  background: #d5b699;
  border-radius: 5px;
  border: #2c3e50 1px solid;
  padding: 10px 15px;
  text-decoration: none;
  font-size: 14px;
}
</style>