import axios from "axios/index"

export const groupApi = {
    save(data) {
        return new Promise((resolve, reject) => {
            axios.patch('/catalog/group', data)
                .then(response => response.data)
                .then(response => {resolve(response)})
                .catch(error => { reject(error)})
        })
    }
}