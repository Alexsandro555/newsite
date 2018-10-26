import {ACTIONS} from "../../../../../../../resources/assets/js/constants";
import {groupApi} from "@catalog/api/group.js"

export default {
    /*[ACTIONS.UPDATE_ITEM]: ({commit}, objField) => {
        commit('SET_ITEM',objField)
    },*/
    [ACTIONS.SAVE_DATA]: ({state, commit}) => {
        groupApi.save(state.item).then(response => {
        }).catch(err => {})
    }
}