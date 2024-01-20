<template>
  <div class="container text-center py-2">
    <header>
      <h1>Todo List</h1>
      <add-item v-on:addToList="getAllItems()" />
    </header>
    <list-item v-bind:allItemsProps="getTheAllItems" v-on:reloadList="getAllItems()" />
  </div>
</template>

<script>
import axios from "axios";

import addItem from "@/frontend/components/List/addItem.vue";
import listItem from "@/frontend/components/List/listItem.vue";

export default {
  data() {
    return {
      getTheAllItems: [],
    };
  },

  components: {
    addItem,
    listItem,
  },

  methods: {
    async getAllItems() {
      axios
        .get("/api/items")
        .then((response) => {
          if ((response.status == 200) && (response.data.length >= 0)) {
            this.getTheAllItems = response.data;
          } else {
            console.log("get not working or no item in database");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  created() {
    this.getAllItems();
  },
};
</script>

<style lang="scss">
.container {
  header {
    background: #e6e6e6;
    padding: 10px;

    h1 {
      color: 20px;
    }
  }
}
</style>
