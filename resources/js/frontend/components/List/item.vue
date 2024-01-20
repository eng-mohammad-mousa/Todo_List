<template>
  <div class="item text-start">
    <input
      class="mx-2 d-none"
      type="checkbox"
      @change="updateCheck()"
      v-model="itemProps.completed"
      :id="'id' + itemProps.id"
    />

    <label
      :for="'id' + itemProps.id"
      :class="[
        itemProps.completed == 'true' || itemProps.completed == true
          ? 'completed'
          : '',
        'item-text',
      ]"
    >
      {{ itemProps.name }}
    </label>

    <button class="btn btn-danger" @click="removeItem(itemProps.id)">
      <i class="fas fa-trash-alt" style="font-size: 16px"></i>
    </button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  props: ["itemProps"],

  methods: {
    async removeItem(id) {
      axios
        .delete(`/api/item/${id}`)
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemChanged");
          } else {
            console.log("delete not working or no item in database");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    async updateCheck() {
      axios
        .put("/api/item/" + this.itemProps.id, {
          item: this.itemProps,
        })
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemChanged");
          } else {
            console.log("update not working or no item in database");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style lang="scss" scoped>
.item {
  display: flex;
  justify-content: center;
  align-items: center;
}
.item-text {
  width: 100%;
  margin-left: 15px;
}
.completed {
  text-decoration: line-through;
  color: #999;
}
label {
  cursor: pointer;
}
</style>
