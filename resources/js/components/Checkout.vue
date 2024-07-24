<template>
    <div>
      <h2>Checkout</h2>
      <form @submit.prevent="submitOrder">
        <div>
          <label for="name">Name</label>
          <input type="text" v-model="name" id="name" />
        </div>
        <div>
          <label for="address">Address</label>
          <input type="text" v-model="address" id="address" />
        </div>
        <button type="submit">Place Order</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        name: '',
        address: ''
      };
    },
    methods: {
      submitOrder() {
        // Logique pour soumettre la commande
      }
    }
  };
  </script>
  
  <style scoped>
  /* Votre style ici */
  </style>
  