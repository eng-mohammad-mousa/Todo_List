<template>
	<div v-for="(itemAllData, index) in allItemsProps" :key="index">
		<item :itemProps="itemAllData" class="item" v-on:itemChanged="$emit('reloadList')" />
	</div>
</template>

<script>
import item from "@/frontend/components/List/item.vue";

export default {
	props: ['allItemsProps'],
	components: {
		item
	},
};
</script>

<style lang="scss" scoped>
.item {
	background: #e6e6e6;
	padding: 5px;
	margin-top: 5px;
}
</style>
