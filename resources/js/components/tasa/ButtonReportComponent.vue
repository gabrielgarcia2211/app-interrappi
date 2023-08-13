<template>
  <div style="margin-left: 20px;">
    <button class="btn btn-success" @click="generateCsv()">
      <i class="fa fa-file-excel-o" aria-hidden="true" style="color: white"></i>
      Exportar
    </button>
  </div>
</template>

<script>
import Papa from "papaparse";

export default {
  props: ["rowData"],
  data() {
    return {};
  },
  methods: {
    generateCsv() {
      const currentDate = new Date();
      const formattedDate = currentDate.toISOString().slice(0, 10); // Formato YYYY-MM-DD

      const csv = Papa.unparse(this.rowData, {
        delimiter: ";",
      });

      const csvData = new Blob([csv], { type: "text/csv;charset=utf-8;" });
      const link = document.createElement("a");
      const url = URL.createObjectURL(csvData);

      link.setAttribute("href", url);
      link.setAttribute("download", `reporte_${formattedDate}.csv`); // Nombre con la fecha actual
      link.style.visibility = "hidden";
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      URL.revokeObjectURL(url); 
    },
  },
};
</script>
