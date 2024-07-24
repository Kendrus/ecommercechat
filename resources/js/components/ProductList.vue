<template>
    <div>
      <h2>Product List</h2>
      <div v-for="product in products" :key="product.id">
        <h3>{{ product.name }}</h3>
        <p>{{ product.description }}</p>
        <p>{{ product.price }}</p>
        <router-link :to="`/product/${product.id}`">View Details</router-link>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        products: []
      };
    },
    mounted() {
      axios.get('/api/products').then(response => {
        this.products = response.data;
      });
    }
  };
  </script>
  
  <style scoped>
  /* Votre style ici */
  </style>
  