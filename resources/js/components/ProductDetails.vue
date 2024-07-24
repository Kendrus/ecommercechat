<template>
    <div>
      <h2>{{ product.name }}</h2>
      <p>{{ product.description }}</p>
      <p>{{ product.price }}</p>
      <button @click="addToCart">Add to Cart</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        product: {}
      };
    },
    mounted() {
      const productId = this.$route.params.id;
      axios.get(`/api/products/${productId}`).then(response => {
        this.product = response.data;
      });
    },
    methods: {
      addToCart() {
        // Logique pour ajouter au panier
      }
    }
  };
  </script>
  
  <style scoped>
  /* Votre style ici */
  </style>
  