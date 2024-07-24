<template>
    <div>
      <h2>Your Cart</h2>
      <div v-for="item in cart" :key="item.id">
        <h3>{{ item.name }}</h3>
        <p>{{ item.price }}</p>
        <p>Quantity: {{ item.quantity }}</p>
      </div>
      <router-link to="/checkout">Proceed to Checkout</router-link>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cart: []
      };
    },
    mounted() {
      axios.get('/api/cart').then(response => {
        this.cart = response.data;
      });
    }
  };
  </script>
  
  <style scoped>
  /* Votre style ici */
  </style>
  