<template>

    <div class="yl_search row">
        <div class="yl_form_search col-md-10">
            <select v-model="categorie" name="c">
                <option value="All">Toutes Catégories</option>
                <option>Informatique</option>
                <option value="telephone">&nbsp;&nbsp;Téléphone</option>
                <option value="ordinateur">&nbsp;&nbsp;Ordinateur</option>
                <option value="console&jeuxvideo">&nbsp;&nbsp;Console&JeuxVidéo</option>
                <option value="tablette">&nbsp;&nbsp;Tablette</option>
                <option >Véhicules</option>
                <option>Immobilier</option>
            </select>
            <input type="text" class="inp_search" name="q" placeholder="Que recherchez-vous ?" v-model="search">

            <div class="yl_pop_search">
                <ul>
                    <li v-for="product in products">
                       <a :href="'/search?c='+categorie+'&q='+product.nom">
                          <i class="fa fa-search"></i> {{ product.nom }}
                       </a>
                    </li>
                    <li v-if="products.length == 0">
                        <a :href="'/search?c='+categorie+'&q='+search">
                            <i class="fa fa-search"></i> {{search}}
                        </a>
                    </li>
                    <li v-if="search" class="yl_showAll">
                        <a :href="'/search?c='+categorie+'&q='+search">
                           Voir tous les résultats pour
                            <i class="fa fa-angle-double-left"></i>
                            {{search}}
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="yl_btn_search col-md-2">
            <button type="submit" ><i class="fa fa-search"></i></button>
        </div>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                products : {},
                categorie : 'All',
                search : '',
            }
        },
        methods: {
            getProducts(){
                axios.get('/gestionsearchpopproductsysltechno/'+this.search+'/'+this.categorie)
                    .then(response => {
                        this.products = response.data.products;

                    }).catch(error => {
                    console.log(error);
                })
            },


        },

        watch : {
            categorie(){
                this.getProducts();
            },
            search(){
                this.getProducts();
                if(this.search == ''){
                    this.products = {}
                }
            }
        }
    }
</script>
