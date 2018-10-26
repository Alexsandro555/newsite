import * as actions from './actions'
import mutations from './mutations'
import auth from '../components/auth/store/state'
import sliderFullPage from '../store/modules/slider-full-page/state'
import initializer from '../store/modules/initializer'
import article from '@article/vuex/store'
import catalog from '@catalog/vuex/store'
import cart from '@cart/vuex/store'
import notification from '@/vuex/notification/store'
import group from '@catalog/vuex/group/store'

export default function() {
    return {
       modules: {
           auth,
           sliderFullPage,
           initializer,
           article,
           catalog,
           cart,
           group,
           notification
       },
       mutations
    }
}