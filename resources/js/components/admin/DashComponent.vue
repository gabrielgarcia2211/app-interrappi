<template>
  <div style="margin-top: 10px">
    <div class="input-group mb-3" style="width: 30%; margin-left: 2px">
      <input
        type="text"
        class="form-control"
        id="filter-text-box"
        name="filter-text-box"
        placeholder="Buscar..."
        v-on:input="onFilterTextBoxChanged()"
      />
    </div>
    <ag-grid-vue
      style="width: 100%; height: 500px; padding: 5px"
      class="ag-theme-alpine"
      :columnDefs="columnDefs"
      :defaultColDef="defaultColDef"
      @grid-ready="onGridReady"
      @cell-clicked="onCellClicked"
      :rowData="rowData"
      :rowSelection="'single'"
      :pagination="true"
      :paginationPageSize="20"
      :enableCellTextSelection="true"
    >
    </ag-grid-vue>
  </div>
</template>

<script>
// Importar Librerias o Modulos
import { AgGridVue } from "ag-grid-vue";

export default {
  data() {
    return {
      defaultColDef: {
        sortable: true,
        flex: 1,
        minWidth: 100,
        resizable: true,
      },
      gridApi: null,
      columnApi: null,
      columnDefs: [],
      rowData: [],
      rowChange: {
        old: [],
      },
      new_status: 0,
    };
  },
  components: {
    AgGridVue,
  },
  created() {
    this.loadColums();
    this.loadForms();
  },
  mounted() {},
  methods: {
    onGridReady(params) {
      this.gridApi = params.api;
      this.gridColumnApi = params.columnApi;
    },
    loadColums() {
      this.columnDefs = [
        {
          headerName: "ID",
          field: "id",
          minWidth: 80,
        },
        {
          headerName: "Nombre Beneficiario",
          field: "nombre_beneficiario",
          minWidth: 180,
        },
        {
          headerName: "Cedula beneficiario",
          field: "cedula_beneficiario",
          minWidth: 200,
        },
        {
          headerName: "Banco beneficiario",
          field: "banco_beneficiario",
          minWidth: 200,
        },
        {
          headerName: "Telefono beneficiario",
          field: "telefono_beneficiario",
          minWidth: 200,
        },
        { headerName: "Nro cuenta", field: "nro_cuenta", minWidth: 160 },
        { headerName: "Tipo de persona", field: "tipo_persona", minWidth: 160 },
        { headerName: "Tipo de cuenta", field: "tipo_cuenta", minWidth: 160 },
        {
          headerName: "Nombre depositante",
          field: "nombre_depositante",
          minWidth: 200,
        },
        {
          headerName: "Cedula depositante",
          field: "cedula_depositante",
          minWidth: 200,
        },
        {
          headerName: "Telefono depositante",
          field: "telefono_depositante",
          minWidth: 200,
        },
        {
          headerName: "Correo depositante",
          field: "correo_depositante",
          minWidth: 200,
        },
        {
          headerName: "Instagram depositante",
          field: "instagram_depositante",
          minWidth: 100,
        },
        { headerName: "Monto a Enviar", field: "monto_enviar", minWidth: 200 },
        {
          headerName: "Imagen Comprobante",
          field: "imagen_comprobante",
          minWidth: 200,
          cellRenderer: function (params) {
            if (params.data.imagen_comprobante) {
              return '<button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>';
            } else {
              return '<button type="button" class="btn btn-danger"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>';
            }
          },
        },
        {
          headerName: "Email Comprobante",
          field: "email_comprobante",
          minWidth: 200,
        },
        { headerName: "Moneda", field: "id_moneda", minWidth: 150 },
        { headerName: "Entidad", field: "id_entidad", minWidth: 150 },
        { headerName: "Formulario", field: "id_formulario", minWidth: 150 },
        { headerName: "Fecha de Peticion", field: "creado", minWidth: 150 },
        {
          headerName: "Estado",
          field: "id_estado",
          minWidth: 150,
          cellStyle: (params) => {
            if (params.value == "EN ESPERA") {
              return { color: "white", backgroundColor: "red" };
            } else {
              return { color: "white", backgroundColor: "green" };
            }
          },
        },
        {
          headerName: "Comprobante",
          field: "comprobante",
          minWidth: 150,
          cellRenderer: function (params) {
            if (params.data.comprobante) {
              return '<button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>';
            } else {
              return '<button type="button" class="btn btn-info"><i class="fa fa-upload" aria-hidden="true"></i></button>';
            }
          },
          cellStyle: { "text-align": "center" },
        },
      ];
    },
    loadForms() {
      axios
        .get("../home/get/forms")
        .then((data) => {
          this.rowData = data.data ? data.data : [];
        })
        .catch((error) => {
          this.$readStatusHttp(error);
        });
    },
    onFilterTextBoxChanged() {
      this.gridApi.setQuickFilter(
        document.getElementById("filter-text-box").value
      );
    },
    onCellClicked(event) {
      if (event.colDef.field === "id_estado") {
        let id = this.gridApi.getSelectedRows()[0]["id"];
        let status = this.gridApi.getSelectedRows()[0]["id_estado"];
        // capturamos el nuevo estado
        if (status == "EN ESPERA") {
          this.new_status = 2;
        } else {
          this.new_status = 1;
        }
        this.$swal
          .fire({
            title: "Cambiar estado?",
            text: "El esta del proceso cambiara...!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Cambiar",
          })
          .then((result) => {
            if (result.isConfirmed) {
              axios
                .post("../home/requests/status", {
                  id: id,
                  status: this.new_status,
                })
                .then((data) => {
                  this.$alertSuccess(
                    "Proceso completo",
                    "Se cambio el estado del proceso"
                  );
                  this.loadForms();
                })
                .catch((error) => {
                  this.$readStatusHttp(error);
                });
            }
          });
      } else if (event.colDef.field === "comprobante") {
        let id = this.gridApi.getSelectedRows()[0]["id"];
        let comprobante = this.gridApi.getSelectedRows()[0]["comprobante"];
        if (comprobante) {
          axios
            .post("../home/get/file", { id: id })
            .then((data) => {
              const { url, size } = data.data;
              this.$swal
                .fire({
                  title: "Comprobante Cargado",
                  imageUrl: url,
                  imageWidth: 300,
                  imageHeight: 300,
                  showCancelButton: true,
                  confirmButtonColor: "#ff0000",
                  confirmButtonText: "Eliminar",
                  cancelButtonText: "Cerrar",
                })
                .then((result) => {
                  if (result.isConfirmed) {
                    this.$swal
                      .fire({
                        title: "¿Estás seguro?",
                        text: "No podrás deshacer esta acción.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Sí, eliminar",
                        cancelButtonText: "Cancelar",
                      })
                      .then((result) => {
                        if (result.isConfirmed) {
                          // Acción si el usuario confirma la eliminación
                          axios
                            .post("../home/delete/file", { id: id })
                            .then((data) => {
                              this.loadForms();
                              this.$alertSuccess(
                                "Proceso completo",
                                "Se elimino el comprobante"
                              );
                            })
                            .catch((error) => {
                              this.$readStatusHttp(error);
                            });
                        }
                      });
                  }
                });
            })
            .catch((error) => {
              this.$readStatusHttp(error);
            });
        } else {
          this.$swal
            .fire({
              title: "Subir archivo",
              input: "file",
              inputAttributes: {
                accept: "image/*",
              },
              showCancelButton: true,
              confirmButtonText: "Subir",
              showLoaderOnConfirm: true,
              preConfirm: (file) => {
                const formData = new FormData();
                formData.append("file", file);
                formData.append("id", id);
                return fetch("../home/save/file", {
                  method: "POST",
                  headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                      "content"
                    ),
                  },
                  body: formData,
                })
                  .then((response) => {
                    if (!response.ok) {
                      throw new Error(response.statusText);
                    }
                    return response.json();
                  })
                  .catch((error) => {
                    console.log(error.message);
                    this.$swal.showValidationMessage(`Error de Carga`);
                  });
              },
              allowOutsideClick: () => !this.$swal.isLoading(),
            })
            .then((result) => {
              if (result.isConfirmed) {
                const { url, size } = result.value;
                this.loadForms();
                this.$swal.fire({
                  title: "Archivo subido correctamente",
                  imageUrl: url,
                  text: `Peso del archivo: ${size} bytes`,
                  imageWidth: 300,
                  imageHeight: 300,
                });
              }
            });
        }
      } else if (event.colDef.field === "imagen_comprobante") {
        let imagen_comprobante =
          this.gridApi.getSelectedRows()[0]["imagen_comprobante"];
        if (imagen_comprobante) {
          this.$swal.fire({
            title: "Voucher Cargado",
            imageUrl: imagen_comprobante,
            imageWidth: 300,
            imageHeight: 300,
            showCancelButton: true,
            confirmButtonColor: "#ff0000",
          });
        }
      }
    },
  },
};
</script>