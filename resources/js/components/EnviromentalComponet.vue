enviromental<template>
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow align-items-center p-4">
                    <fieldset v-show="NumerNext==1">
                        <legend>Datos del Denunciante</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Denunciante</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="user.idTypeEnviromental">
                                        <option value="1">Anónimo</option>
                                        <option value="2">Con reserva de datos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" v-if="user.idTypeEnviromental==2">
                                <label for="basic-url" class="form-label">Tipo Persona</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="user.typePers" @change="changeTypeDocuUser">
                                        <option value="1">Natural</option>
                                        <option value="2">Jurídica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" v-if="user.idTypeEnviromental==2">
                                <label for="basic-url" class="form-label">Tipo de Doc.</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="user.typeDoc">
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="user.idTypeEnviromental==2">
                            <div class="col-md-12" v-show="user.typePers==1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">N°. Doc.</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.numDoc" @blur="searchUser()">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Apellido Paterno</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.lastName">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Apellido Materno</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.mothersLastName">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Nombres</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" v-show="user.typePers==2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">N°. RUC</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.numRuc" @blur="searchUser()">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <label for="basic-url" class="form-label">Razón Social</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="user.razonSocial">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="user.idTypeEnviromental==2">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Telefono</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="user.phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Celular</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="user.cellPhone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Correo</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="user.gmail">
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="user.idTypeEnviromental==2">
                            <div class="col-md-12">
                                <label for="basic-url" class="form-label">Dirección</label>
                                <input type="text" class="form-control" v-model="user.address">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset v-show="NumerNext==1">
                        <legend>Denuncias Previas</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Ha realizado denuncia previa?</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="user.denun_previa">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="NO">NO</option>
                                        <option value="SI">SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Ante que entidad?</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="user.resp_previa">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Obtuvo despuesta?</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="user.obt_resp">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="NO">NO</option>
                                        <option value="SI">SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Cuál fue la respuesta?</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="user.resp_obt_resp">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mt-2" v-show="NumerNext==1">
                        <div class="col-md-4 offset-8 d-flex justify-content-end">
                            <button class="btn btn-primary" @click="next()">Siguiente <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>



                    <fieldset v-show="NumerNext==2">
                        <legend>Datos del Denunciado</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Denunciante</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="enviromental.idTypeEnviromental">
                                        <option value="1">Anónimo</option>
                                        <option value="2">Con reserva de datos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" v-if="enviromental.idTypeEnviromental==2">
                                <label for="basic-url" class="form-label">Tipo Persona</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="enviromental.typePers" @change="changeTypeDocuEnviromental">
                                        <option value="1">Natural</option>
                                        <option value="2">Jurídica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" v-if="enviromental.idTypeEnviromental==2">
                                <label for="basic-url" class="form-label">Tipo de Doc.</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" v-model="enviromental.typeDoc">
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="enviromental.idTypeEnviromental==2">
                            <div class="col-md-12" v-show="enviromental.typePers==1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">N°. Doc.</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.numDoc" @blur="searchUserEnviromental">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Apellido Paterno</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.lastName">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Apellido Materno</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.mothersLastName">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">Nombres</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" v-show="enviromental.typePers==2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="basic-url" class="form-label">N°. RUC</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.numRuc" @blur="searchUserEnviromental">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <label for="basic-url" class="form-label">Razon Social</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" v-model="enviromental.razonSocial">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="enviromental.idTypeEnviromental==2">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Telefono</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="enviromental.phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Celular</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="enviromental.cellPhone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Correo</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="enviromental.gmail">
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="enviromental.idTypeEnviromental==2">
                            <div class="col-md-12">
                                <label for="basic-url" class="form-label">Dirección</label>
                                <input type="text" class="form-control" v-model="enviromental.address">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset v-show="NumerNext==2">
                        <legend>DESCRIPCIÓN DE LOS HECHOS (Por favor ingrese la dirección y la descripción del daño ambiental)</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Dirección</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="enviromental.addres_ubi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Referencia</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="enviromental.references">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Cargar archivos de capacidad 2MB(MAX)</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @change="handleFileSelect">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="basic-url" class="form-label">Descripcion</label>
                            <div class="col-md-12">
                                <textarea cols="30" rows="3" class="form-control" v-model="enviromental.description"></textarea>
                            </div>
                        </div>
                        <div class="row" style="display: none;">
                            <table>
                            <tr>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            </tr>
                            <tr v-for="(item, index) in markers" :key="index" >
                                <td>
                                    <input type="text" id="MAPA_LONGITUD" v-model.number="item.position.lat"  name="MAPA_LONGITUD">
                                </td>
                                <td> 
                                    <input type="text" id="MAPA_LATITUD" v-model.number="item.position.lng"  name="MAPA_LATITUD">
                                </td>
                            </tr>
                        </table>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12" id="map-container">
                                <label for="basic-url" class="form-label">Marque la ubicación de los hechos</label>
                                <l-map 
                                        ref="mymap"
                                        :zoom="zoom" 
                                        :options="mapOptions"
                                        :center="center" 
                                        style="height: 92%; width: 100%">
                                    <l-tile-layer
                                        v-for="tileProvider in tileProviders"
                                        :key="tileProvider.name"
                                        :name="tileProvider.name"
                                        :visible="tileProvider.visible"
                                        :url="tileProvider.url"
                                        :attribution="tileProvider.attribution"
                                       
                                        layer-type="base"
                                    />
                                    <l-control-zoom :position="zoomPosition" />
                                    <l-marker
                                        v-for="marker in markers"
                                        :key="marker.id"
                                        :visible="marker.visible"
                                        :draggable="marker.draggable"
                                        :lat-lng.sync="marker.position"
                                        :icon="marker.icon"
                                    >
                                        <l-popup :content="marker.tooltip" />
                                        <l-tooltip :content="marker.tooltip" />
                                    </l-marker>
                                </l-map>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mt-4" v-show="NumerNext==2">
                        <div class="col-md-4 offset-8 d-flex justify-content-end">
                            <button class="btn btn-info mx-2" @click="previus()">Atras <i class="fa-solid fa-arrow-left"></i></button>
                            <button class="btn btn-primary" @click="addEnviromental()">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Services from '../services/services';
    import { Icon } from 'leaflet';   
    import { LMap,
        LTileLayer,
        LControlZoom,
        LPopup,
        LMarker,
        LTooltip,
        LLayerGroup,
        LPolyline,
        LControlAttribution,
        LControlScale,
        LControlLayers } 
    from 'vue2-leaflet';
    import markerIcon2x from 'leaflet/dist/images/marker-icon-2x.png';
    export default {
        name:'enviromentalComponet',
        props:{
            imgUrl: {
                type: String,
                default: ""
            },
            imgShadow: {
                type: String,
                default: ""
            },
        },
        components:{
            LMap,
            LTileLayer,
            LControlZoom,
            LPopup,
            LMarker,
            LTooltip,
            LLayerGroup,
            LPolyline,
            LControlAttribution,
            LControlScale,
            LControlLayers
        },
        data(){
            return {
                NumerNext:1,
                zoom: 15,
                center: [-11.86689943166356, -77.07686732141322],
                mapOptions: {
                    zoomControl: false,
                    attributionControl: false,
                    zoomSnap: 0.5,
                },
                zoomPosition: 'topleft',
                attributionPosition: 'bottomright',
                layersPosition: 'topright',
                attributionPrefix: 'Vue2Leaflet',
                imperial: false,
                Positions: ['topleft', 'topright', 'bottomleft', 'bottomright'],
                tileProviders: [
                    {
                        name: 'OpenStreetMap',
                        visible: true,
                        attribution:'&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                        url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                    }
                ],
                markerLatLng: [],
                markers: [
                    {
                    id: 'm1',
                    position: { lat: -11.86689943166356, lng: -77.07686732141322 },
                    tooltip: 'Municipalidad de Puente Piedra',
                    draggable: true,
                    visible: true,
                    },
                ],
                user:{
                    idTypeEnviromental:1,
                    typePers:'1',
                    typeDoc:'1',
                    numDoc:'',
                    numRuc:'',
                    razonSocial:'',
                    name:'',
                    lastName:'',
                    mothersLastName:'',
                    phone:'',
                    cellPhone:'',
                    gmail:'',
                    address:'',
                    denun_previa:'',
                    resp_previa:'',
                    obt_resp:'',
                    resp_obt_resp:'',
                },
                enviromental:{
                    idTypeEnviromental:1,
                    typePers:'1',
                    typeDoc:'1',
                    numDoc:'',
                    numRuc:'',
                    razonSocial:'',
                    name:'',
                    lastName:'',
                    mothersLastName:'',
                    phone:'',
                    cellPhone:'',
                    gmail:'',
                    address:'',
                    addres_ubi:'',
                    references:'',
                    files:'',
                    description:'',
                },
            }
        },
        mounted() {
            delete Icon.Default.prototype._getIconUrl;
            Icon.Default.mergeOptions({
                iconRetinaUrl: markerIcon2x,
                iconUrl:this.imgUrl,
                shadowUrl:this.imgShadow,
            });
        },
        methods:{
            next(){
                this.NumerNext = 2;
                setTimeout(() => {
                    this.$refs.mymap.mapObject.invalidateSize(); 
            },  500);
            },
            previus(){
                this.NumerNext = 1;
            },
            async searchUser(){
                let obj = {
                    numDoc : this.user.numDoc,
                    numRuc : this.user.numRuc,
                    typeDoc : this.user.typeDoc,
                }
                const result = await Services.getShowInfo('/denuncia-ambiental/user-search', obj);
                if(result.type=='DNI'){
                    if(result.status){
                        console.log(result.data[0])
                        this.user.name=result.data[0].no_usrio;
                        this.user.lastName=result.data[0].ap_pate;
                        this.user.mothersLastName=result.data[0].ap_mate;
                        this.user.phone=result.data[0].nu_tele;
                        this.user.cellPhone=result.data[0].nu_tele;
                        this.user.gmail=result.data[0].de_mail;
                        this.user.address=result.data[0].de_dire;
                    }else{
                        this.clearInputUser();
                    }
                }else{
                    if(result.status){
                        this.user.razonSocial=result.data[0].no_crto;
                        this.user.cellPhone=result.data[0].nu_tele;
                        this.user.gmail=result.data[0].de_mail;
                        this.user.address=result.data[0].de_dire;
                    }else{
                        this.clearInputUser();
                    }
                }
            },
            async searchUserEnviromental(){
                let obj = {
                    numDoc : this.enviromental.numDoc,
                    numRuc : this.enviromental.numRuc,
                    typeDoc : this.enviromental.typeDoc,
                }
                const result = await Services.getShowInfo('/denuncia-ambiental/user-search', obj);
                if(result.type=='DNI'){
                    if(result.status){
                        console.log(result.data[0])
                        this.enviromental.name=result.data[0].no_usrio;
                        this.enviromental.lastName=result.data[0].ap_pate;
                        this.enviromental.mothersLastName=result.data[0].ap_mate;
                        this.enviromental.phone=result.data[0].nu_tele;
                        this.enviromental.cellPhone=result.data[0].nu_tele;
                        this.enviromental.gmail=result.data[0].de_mail;
                        this.enviromental.address=result.data[0].de_dire;
                    }else{
                        this.clearInputEnviro();
                    }
                }else{
                    if(result.status){
                        this.enviromental.razonSocial=result.data[0].no_crto;
                        this.enviromental.cellPhone=result.data[0].nu_tele;
                        this.enviromental.gmail=result.data[0].de_mail;
                        this.enviromental.address=result.data[0].de_dire;
                    }else{
                        this.clearInputEnviro();
                    }
                }
            },
            clearInputUser(){
                this.user.name="";
                this.user.lastName="";
                this.user.mothersLastName="";
                this.user.phone="";
                this.user.cellPhone="";
                this.user.gmail="";
                this.user.address="";
            },
            clearInputEnviro(){
                this.enviromental.razonSocial="";
                this.enviromental.phone="";
                this.enviromental.cellPhone="";
                this.enviromental.gmail="";
                this.enviromental.address="";
            },
            handleFileSelect(event){
                const selectedFiles = event.target.files[0];
                this.enviromental.files = selectedFiles;
            },
            changeTypeDocuUser(){
                if(this.user.typePers==1){
                    this.user.typeDoc = 1;
                }else{
                    this.user.typeDoc = 2;
                }
            },
            changeTypeDocuEnviromental(){
                if(this.enviromental.typePers==1){
                    this.enviromental.typeDoc = 1;
                }else{
                    this.enviromental.typeDoc = 2;
                }
            },
            async addEnviromental(){
                const formData = new FormData();
                formData.append('user_idTypeEnviromental', this.user.idTypeEnviromental);
                formData.append('user_typePers',this.user.typePers);
                formData.append('user_typeDoc',this.user.typeDoc);
                formData.append('user_numDoc',this.user.numDoc);
                formData.append('user_numRuc',this.user.numRuc);
                formData.append('user_razonSocial',this.user.razonSocial);
                formData.append('user_name',this.user.name);
                formData.append('user_lastName',this.user.lastName);
                formData.append('user_mothersLastName',this.user.mothersLastName);
                formData.append('user_phone',this.user.phone);
                formData.append('user_cellPhone',this.user.cellPhone);
                formData.append('user_gmail',this.user.gmail);
                formData.append('user_address',this.user.address);
                formData.append('user_denun_previa',this.user.denun_previa);
                formData.append('user_resp_previa',this.user.resp_previa);
                formData.append('user_obt_resp',this.user.obt_resp);
                formData.append('user_resp_obt_resp',this.user.resp_obt_resp);

                formData.append('enviromental_idTypeEnviromental',this.enviromental.idTypeEnviromental);
                formData.append('enviromental_typePers',this.enviromental.typePers);
                formData.append('enviromental_typeDoc',this.enviromental.typeDoc);
                formData.append('enviromental_numDoc',this.enviromental.numDoc);
                formData.append('enviromental_numRuc',this.enviromental.numRuc);
                formData.append('enviromental_razonSocial',this.enviromental.razonSocial);
                formData.append('enviromental_name',this.enviromental.name);
                formData.append('enviromental_lastName',this.enviromental.lastName);
                formData.append('enviromental_mothersLastName',this.enviromental.mothersLastName);
                formData.append('enviromental_phone',this.enviromental.phone);
                formData.append('enviromental_cellPhone',this.enviromental.cellPhone);
                formData.append('enviromental_gmail',this.enviromental.gmail);
                formData.append('enviromental_address',this.enviromental.address);
                formData.append('enviromental_addres_ubi',this.enviromental.addres_ubi);
                formData.append('enviromental_references',this.enviromental.references);
                formData.append('enviromental_files',this.enviromental.files);
                formData.append('enviromental_description',this.enviromental.description);
                formData.append('enviromental_longitud',this.markers[0].position.lng);
                formData.append('enviromental_latitud',this.markers[0].position.lat);


                const result = await Services.addNewInfo('/denuncia-ambiental/add-enviromental', formData);
                console.log(result)
            }
        }
    }
</script>
<style>
#map-container {
    height: 350px !important;
}
</style>