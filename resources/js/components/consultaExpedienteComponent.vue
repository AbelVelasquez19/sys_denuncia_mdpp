<template>
      <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow align-items-center p-4 text-center">
                    <h3>CONSULTA DE EXPEDIENTES</h3>
                    <fieldset>
                        <legend>Ingresar condiciones de busqueda</legend>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Tipo de Documento</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="tipoExpediente">
                                        <option value="22">EXPEDIENTE</option>
                                        <option value="17">SIMPLE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" >
                                <label for="basic-url" class="form-label">Año del trámite</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="annoExpediente">
                                        <option value="0" selected disabled>--Seleccionar--</option>
                                        <option v-for="item in annos" :key="item.cdgo_anio" :value="item.cdgo_anio">{{ item.de_anio }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Numero del trámite.</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="numeroExpediente">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="basic-url" class="form-label">.</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-primary" @click="buscarExpediente">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset v-if="opcion!=0">
                        <legend>Resultado del búsqueda</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="mb-3">Numero de Expediente: <span class="bg-danger text-white p-1 border-2">{{ expediente }}</span></h5>
                                <div class="row mb-2 d-flex justify-content-center" v-for="(item,index) in detalle" :key="index">
                                    <div class="col-md-6">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="border: 1px solid #c3c3d3;padding: 5px !important;border-radius: 5px;">Fecha Movimiento : {{ item.fe_rcbdo_trmte }}</legend>
                                            <div class="row">
                                                <div class="col-md-9 text-start">
                                                    <label for="txt_desde"><b>Área</b></label><br>
                                                    {{ item.de_area }}
                                                </div> 
                                                <div class="col-md-3 text-start">
                                                    <label for="txt_desde"><b>Etapa</b></label><br>
                                                    {{ item.de_estdo_trmte }}
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-md-12 text-start">
                                                    <label for="txt_desde"><b>Teléfono del Área</b></label><br> {{ item.nu_tele }}
                                                </div> 
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-md-12 text-start">
                                                    <label for="txt_desde"><b>Detalle</b></label><br>
                                                    <div style="text-align: justify;">{{ item.de_obse }}</div>
                                                </div> 
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
      </div>
</template>
<script>
    import Services from '../services/services';
    export default {
        data(){
            return {
                annos:{},
                tipoExpediente:22,
                annoExpediente:0,
                numeroExpediente:null,
                expediente:null,
                detalle:{},
                opcion:0
            }
        },
        mounted(){
            this.searchUserEnviromental();
        },
        methods:{
            async searchUserEnviromental() {
                const result = await Services.getAll('/consultas/anno');
                this.annos = result;
            },
            async buscarExpediente(){
                let obj = {
                    tipoExpediente:this.tipoExpediente,
                    annoExpediente:this.annoExpediente,
                    numeroExpediente:this.numeroExpediente
                }
                const result = await Services.addNewInfo('/consultas/buscar',obj);
                console.log(result);
                if(result.status){
                    if(result.result[0].status){
                        this.opcion = 1;
                        this.detalle = result.result[0].detalle
                        this.expediente = result.result[0].expediente
                    }else{
                        this.opcion = 0;
                        this.detalle = {}
                        this.expediente = null
                        this.$toast.error('No existe el número de tramite');
                    }
                }else{
                    this.opcion = 0;
                }
            }
        }
    }
</script>