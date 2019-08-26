<template>
    <div class="yl_chat">
        <span id="count_msg" v-if="! bodyvisible">2</span>
        <span v-if="bodyvisible"><i class="fa fa-close" @click="bodyhide()"></i></span>
        <div class="yl_header_chat" @click="bodyshow()">Online
        </div>
        <div class="yl_body_chat" v-if="bodyvisible"></div>
        <div class="yl_footer_chat" v-if="bodyvisible">
            <textarea class="form-control"></textarea>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                bodyvisible : false,
            }
        },
        methods: {
            handleScroll () {
                if(document.documentElement.scrollTop > 400){
                    document.getElementById('btn-scroll').style.visibility='visible';
                }else {
                    document.getElementById('btn-scroll').style.visibility='hidden';

                }
            },
            bodyshow(){
                this.bodyvisible = true;
            },
            bodyhide(){
                this.bodyvisible = false;
            }
        },
        created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        }

    }
</script>
