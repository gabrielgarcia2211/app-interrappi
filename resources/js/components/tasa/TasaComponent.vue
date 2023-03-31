<template>
  <div class="card" style="width: 100%; height: 100%">
    <div class="card-body">
      <h5 class="card-title">Listado</h5>
      <p class="card-text">
        <select
          class="form-select"
          aria-label="Default select example"
          @change="onChangeTasa()"
          v-model="selectTasa"
        >
          <option v-for="tasa in listTasa" :value="tasa" v-bind:key="tasa.id">
            {{ tasa.descripcion }}
          </option>
        </select>
      </p>
      <div class="input-group mb-3">
        <span class="input-group-text" id="labelValueOld">Valor Actual - Bs</span>
        <input
          type="text"
          class="form-control"
          aria-label="Username"
          aria-describedby="labelValueOld"
          v-model="labelValueOld"
          disabled
        />
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="labelValueNew">Valor Nuevo - Bs</span>
        <input
          type="text"
          class="form-control"
          placeholder="valor"
          aria-label="Username"
          aria-describedby="labelValueNew"
          v-model="labelValueNew"
        />
      </div>
      <button class="btn btn-primary" v-on:click="onUpdateTasa()">
        Guardar
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["modalName"],
  mounted() {},
  data() {
    return {
      listTasa: null,
      selectTasa: null,
      labelValueOld: null,
      labelValueNew: null,
    };
  },
  components: {},
  created() {
    this.loadTasas();
  },
  methods: {
    hide() {
      this.$modal.hide(this.modalName);
    },
    loadTasas() {
      axios
        .get("../home/get/all")
        .then((data) => {
          this.listTasa = data.data ? data.data : [];
        })
        .catch((error) => {
          this.$readStatusHttp(error);
        });
    },
    onChangeTasa() {
      axios
        .get(`../home/get/tasa/${this.selectTasa.id}`)
        .then((data) => {
          let response = data.data ? data.data : [];
          this.labelValueOld = response.valor;
        })
        .catch((error) => {
          this.$readStatusHttp(error);
        });
    },
    onUpdateTasa() {
      let data = {
        id: this.selectTasa.id,
        valor: this.labelValueNew,
      };
      axios
        .get(`../home/update/tasa/${data.id}/${data.valor}`)
        .then((data) => {
          this.$alertSuccess("Tasa Actualizada");
          this.labelValueOld = this.labelValueNew;
          this.labelValueNew = null;
        })
        .catch((error) => {
          this.$readStatusHttp(error);
        });
    },
  },
};
</script>
