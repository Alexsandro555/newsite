<template>
    <v-container flud grid-list-md>
        <v-layout wrap row>
            <v-flex offset-xs2 xs8>
                <v-card width="1200px">
                    <v-card-title>
                        <h1>Статьи</h1>
                    </v-card-title>
                    <v-card-text>
                        <v-data-table :headers="headers" :items="items" class="elevation-1">
                            <template slot="items" slot-scope="props">
                                <td>{{ props.item.id }}</td>
                                <td class="text-xs-left">{{ props.item.title }}</td>
                                <td class="justify-center layout px-0">
                                    <v-btn icon class="mx-0" @click="$router.push('/article/edit/'+props.item.id)">
                                        <v-icon color="teal">edit</v-icon>
                                    </v-btn>
                                    <v-btn :disabled="props.item.url_key === 'po-umolchaniyu'" icon class="mx-0" :key="props.item.id" @click="deleteItem(props.item)">
                                        <v-icon color="pink">delete</v-icon>
                                    </v-btn>
                                </td>
                            </template>
                            <template slot="no-data">
                                <v-alert :value="true" color="error" icon="warning">
                                    Извините, нет данных для отображения :(
                                </v-alert>
                            </template>
                        </v-data-table>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn @click="addArticle" color="primary" dark class="text-left mb-2">
                            <v-icon>add</v-icon>
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
    import { ACTIONS, GLOBAL } from "@/constants";
    import { mapActions, mapState } from 'vuex'
    export default {
        data: function() {
            return {
                headers: [
                    {
                        text: '#',
                        align: 'left',
                        sortable: false,
                        value: 'id'
                    },
                    {
                        text: 'Заголовок',
                        value: 'title',
                        sortable: false
                    },
                    {
                        text: 'Действия',
                        value: 'title',
                        sortable: false
                    }
                ]
            }
        },
        beforeRouteEnter(to, from, next) {
            next(vm => vm.load())
        },
        beforeRouteUpdate(to, from, next) {
            this.load()
            next()
        },
        computed: {
            ...mapState('article', ['items']),
        },
        methods: {
            addArticle() {
              this.add().then(response => {
                  this.$router.push({name: 'edit-article', params: { id: response.id.toString()}})
              }).catch(error => {})
            },
            deleteItem (item) {
                if(confirm('Вы уверены что хотите удалить запись?')) {
                    this.delete(item.id)
                }
            },
            ...mapActions('article',{load: GLOBAL.LOAD, add: GLOBAL.ADD, delete: GLOBAL.DELETE})
        }
     }
</script>