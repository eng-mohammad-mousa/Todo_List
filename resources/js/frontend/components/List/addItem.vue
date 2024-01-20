<template>
  <div
    class="add-item d-flex justify-content-center align-items-center align-content-center"
  >
    <input
      type="text"
      class="form-control me-2"
      v-model="item.name"
    />

    <button
      :class="[
        item.name ? '' : 'disabled',

        'border-0 form-label m-0 btn btn-success'
      ]"
      @click="addItem()"
    >
      <i class="fa fa-plus" style="font-size: 18px"></i>
    </button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      item: {
        name: "",
      },
    };
  },
  methods: {
    async addItem() {
      if (this.item.name !== "") {
        console.log("i am not empty");

        axios
          .post("/api/item/store", {
            item: this.item,
          })

          .then((response) => {
            if (response.status == 201) {
              this.item.name = "";
							this.$emit("addToList");
            }
          })
          .catch((error) => {
            console.log(error);
          });
      } else {
        console.log("i am empty");
      }
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
