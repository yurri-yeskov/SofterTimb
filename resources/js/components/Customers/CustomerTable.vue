<template>
  <div>
    <b-table striped hover :items="items"></b-table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: []
    };
  },
  mounted() {
    this.getall();
  },
  methods: {
    getall() {
      const _this = this;
      const url = "/customers";
      this.axios.get(url).then((response) => {
          _this.items = response.data
      });
    },
  },
};
</script>

<style>
</style>