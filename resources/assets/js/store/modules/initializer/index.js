export default {
    namespaced: true,
    state: {
        messages: {}
    },
    actions: {
        init({ commit, rootState, dispatch}) {
            axios.interceptors.response.use(response => {
                    return response;
                },
                error => {
                    let errorType = error.response.status
                    if(errorType == 419) {
                        setTimeout(() => {document.location.href = '/'},2000)
                    }
                    if(errorType == 422) {
                        //let errors = error.response.data.errors

                        /*if(errors) {
                            for(let field in errors) {
                                commit('INIT', {field, errors})
                            }
                        }*/
                        commit('SET_ERRORS', error.response.data.errors)
                    }
                    else {
                        swal(errorType.toString(), error.response.data.message, "error");
                    }
                    return Promise.reject(error.response);
                })
        },
        resetError({commit}) {
            commit('RESET_ERROR')
        }
    },
    getters: {},
    mutations: {
        /*INIT : (state, payload) => {
            let error = [];
            error.push(payload.errors[payload.field])
            let obj =
            state.messages[payload.field] = error
            console.log('Messages: ', state.messages)
        },*/
        SET_ERRORS: (state, payload) => {
            state.messages = Object.assign({}, payload)
        },
        RESET_ERROR: (state) => {
            state.messages = {}
        }
    }
}