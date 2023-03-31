<template>
  <div>
    <button class="btn btn-primary" v-on:click="show()">
      <i class="fa fa-list" aria-hidden="true" style="color: white"></i> Tasas
    </button>
    <modal :click-to-close="true" :scrollable="true" :name="nameModalDetail">
      <TasaComponent />
    </modal>
  </div>
</template>

<script>
import TasaComponent from "./TasaComponent";

export default {
  mounted() {},
  data() {
    return {
      nameModalDetail: "tasa-modal",
    };
  },
  components: {
    TasaComponent,
  },
  beforeMount() {},
  methods: {
    show() {
      this.$modal.show(this.nameModalDetail);
    },
  },
};
</script>
