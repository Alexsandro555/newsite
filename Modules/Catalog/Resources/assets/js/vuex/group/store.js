import module_actions from './actions.js'
import standart_actions from '@/vuex/actions.js'
import standart_mutations from '@/vuex/mutations.js'
import module_mutations from './mutations.js'
import module_getters from './getters.js'

var default_actions = {
    init({ dispatch, commit, getters, rootGetters }) {
    },
}

var actions=Object.assign({}, module_actions, standart_actions)
var mutations=Object.assign({}, module_mutations, standart_mutations)
var getters=Object.assign({}, module_getters)

const state = {
    name: 'group',
    item: {},
    items: [],
    fields: [],
    model: 'Modules\\Catalog\\Entities\\Group',
    url: 'catalog/group'
}

const module = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}

export default module;