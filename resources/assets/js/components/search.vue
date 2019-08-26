<template>

    <div class="row">
        <div class="yl_content_result col-md-9">

            <div class="yl_info_result row">
                <div class="col-md-6 yl_count">
                    <p >{{ products.length }} Annonces</p>
                </div>
                <div class="col-md-6 yl_tri">
                    <select v-model="tri">
                        <option value="recentes">Tri : Plus récentes</option>
                        <option value="anciennes">Tri : Plus anciennes</option>
                        <option value="asc">Tri : Prix croissants</option>
                        <option value="desc">Tri : Prix décroissants</option>
                    </select>
                </div>
            </div>
            <span class="yl_hr_top"></span>

            <div class="row" v-for="(product,index) in products" v-if="index < limit">
                <div class="col-md-3">
                    <a :href="'/product/'+product.id">
                        <img class="img-fluid yl_prod_img" :src="'../img/'+product.images[0].path" >
                    </a>
                </div>
                <div class="col-md-9">
                    <h3 class="yl_title_prod"><a :href="'/product/'+product.id">{{product.nom}}</a></h3>
                    <p class="yl_date_pb"> il ya {{ calculDate(product.created_at) }}</p>
                    <p class="yl_price_prod">{{product.prix}} TND</p>
                    <p class="yl_prod"><strong>Produits : </strong> {{product.type}}</p>
                    <p class="yl_prod_etat"><strong>Etat : </strong>
                        <span  class="text-info" v-if="product.etat == 'occasion'">{{product.etat}}</span>
                        <span  class="text-success" v-else>{{product.etat}}</span>
                    </p>
                    <div class="yl_btn">
                        <a class="btn" href="#"><i class="fa fa-envelope-o"></i>E-MAIL</a>
                        <a class="btn btn-detail" :href="'/product/'+product.id"><i class="fa fa-plus"></i>DETAILS ...</a>

                    </div>

                </div>
                <hr>

            </div>

            <h2 class="no_results"  v-if="products.length == 0" > Aucun résultat pour votre recherche <span>"{{ search }}"</span></h2>

            <div class="yl_more_show" v-if="products.length > limit">
                <button class="btn" @click="showMore()">MONTRER PLUS</button>
            </div>
        </div>
        <div class="content_pub col-md-3">
            <div class="yl_pb_1">
                <img src="img/dda.png">
            </div>
            <div class="yl_pb_1">
                <img src="img/ddb.png">
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        props: ['search','categorie'],
        data() {
            return {
                products : {},
                limit : 5,
                tri : 'recentes',
            }
        },
        methods: {
            getProducts(){
                axios.get('/gestionsearchproductsysltechno/'+this.search+'/'+this.categorie+'/'+this.tri)
                    .then(response => {
                        this.products = response.data.products;

                    }).catch(error => {
                    console.log(error);
                })
            },
            showMore(){
                this.limit = this.limit + 2
            },
            calculDate(d2){
                var d1 = new Date();
                var d2 =  new Date(d2);
                var date = "";

                var years = d1.getFullYear() - d2.getFullYear();

                var months = d1.getMonth() - d2.getMonth();

                var days = d1.getDay() - d2.getDay();

                var hours = d1.getHours() - d2.getHours()

                var minutes = d1.getMinutes() - d2.getMinutes();

                var second = d1.getSeconds() - d2.getSeconds();

                if(years > 0) {
                    date = years + " année";
                }else if(months > 0) {
                    date = months + " mois";
                }else if(days > 0){
                    date = days + " jours";
                }else if(hours > 0) {
                    date = hours + " heures";
                }else if(minutes > 0){
                    date = minutes + " minutes";
                }else {
                    date =  second + " seconde";
                }
                return date;

            }

        },
        mounted () {
            this.getProducts();
        },
        watch : {
            tri(){
                this.getProducts();
            },


        }
    }
</script>
