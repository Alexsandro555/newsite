<template>
    <v-container flud grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                <v-card>
                    <v-card-title><h1>Редактирование группы</h1></v-card-title>
                    <v-card-text>
                        <v-container grid-list-md>
                            <v-layout wrap>
                                <v-flex xs12>
                                    <v-form ref="form" lazy-validation v-model="valid">
                                        <template v-for="(field, num) in fields">
                                            <form-builder :field="field" :num="num" :items="item" @update="updateItem"></form-builder>
                                        </template>
                                    </v-form>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" :disabled="false" flat @click.prevent="save()">Сохранить</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
    import { mapActions, mapState} from 'vuex'
    import { ACTIONS, GLOBAL } from '@/constants'
    import formBuilder from '@/components/form/builder/FormBuilder'
    export default {
        props: {
            id: {
                type: String,
                required: true
            },
        },
        data: function() {
            return {
                valid: false,
            }
        },
        beforeRouteEnter(to, from, next) {
            next(vm => vm.init(to.params.id))
        },
        beforeRouteUpdate(to, from, next) {
            this.init(to.params.id)
            next()
        },
        computed: {
            ...mapState('group', ['item', 'items', 'fields'])
        },
        components: {
            formBuilder
        },
        methods: {
            init(id) {
                if(this.items.length == 0) {
                    this.$router.push({name: 'groups'})
                }
                this.initialization(Number(id))
            },
            ...mapActions('group', {initialization: GLOBAL.INITIALIZATION, updateItem: GLOBAL.UPDATE_ITEM, save: ACTIONS.SAVE_DATA}),
        }
    }
</script>