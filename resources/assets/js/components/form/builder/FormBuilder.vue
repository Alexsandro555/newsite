p<template>
    <div>
        <input type="hidden" v-if="field.primary"
               :name="num"
               :value="items[num]"
               hidden/>
        <v-text-field v-else-if="field.type=='string'"
                      :name="num"
                      :label="field.label"
                      :rules="getRules(field.validations)"
                      :value="items[num]"
                      :counter="getCounter(field.validations)"
                      :error-messages="messages[''+num+'']"
                      :required="getRequired(field.validations)"
                      @input="updateItem($event,num)"></v-text-field>
        <v-text-field v-else-if="field.type=='decimal'"
                      :name="num"
                      :label="field.label"
                      :value="items[num]"
                      :counter="getCounter(field.validations)"
                      :rules="getRules(field.validations)"
                      prefix="₽"
                      :error-messages="messages[''+num+'']"
                      :required="getRequired(field.validations)"
                      @input="updateItem($event,num)"></v-text-field>
        <v-text-field v-else-if="field.type=='integer' && !field.primary"
                      :name="num"
                      :label="field.label"
                      :value="items[num]"
                      :counter="getCounter(field.validations)"
                      :rules="getRules(field.validations)"
                      :required="getRequired(field.validations)"
                      :error-messages="messages[''+num+'']"
                      @input="updateItem($event,num)"></v-text-field>
        <v-text-field v-else-if="field.type=='text'"
                      :name="num"
                      :label="field.label"
                      :value="items[num]"
                      :counter="getCounter(field.validations)"
                      :rules="getRules(field.validations)"
                      :required="getRequired(field.validations)"
                      @input="updateItem($event,num)"
                      :error-messages="messages[''+num+'']"
                      textarea></v-text-field>
        <v-checkbox v-else-if="field.type=='boolean'"
                    :label="field.label"
                    :value="items[num]"
                    v-model="items[num]"
                    :rules="getRules(field.validations)"
                    :required="getRequired(field.validations)"
                    :error-messages="messages[''+num+'']"
                    @change="updateItem($event,num)"
        ></v-checkbox>
        <v-select v-else-if="field.type=='selectbox'"
                  :name="num"
                  :items="field.items"
                  :value="items[num+'_id']"
                  :id="num"
                  v-model="items[num+'_id']"
                  :item-text="field.title"
                  item-value="id"
                  :label="field.label"
                  :rules="getRules(field.validations)"
                  :required="getRequired(field.validations)"
                  :error-messages="messages[''+num+'']"
                  @change="updateItem($event,num)"
                  single-line></v-select>
    </div>
</template>
<script>
    import {ValidationConvert} from '../../validations'
    import { mapState } from 'vuex'

    export default {
        props: {
            field: Object,
            items: Object,
            num: String
        },
        data: function() {
            return {
                validationConvert: new ValidationConvert(),
            }
        },
        computed: {
            ...mapState('initializer', ['messages'])
        },
        methods: {
            updateItem(value,key) {
                let objField = {}
                objField[key] = value
                this.$emit('update',objField)
            },
            getRules(validations) {
                return validations?this.validationConvert.ruleValidations(validations):[]
            },
            getCounter(validations) {
                return validations?this.validationConvert.count(validations):null
            },
            getRequired(validations) {
                return validations?this.validationConvert.required(validations):null
            },
        }
     }
</script>