import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import SingleLine from '../views/SingleLine.vue'
import Generators from '../views/Generators.vue'
import Generators2 from '../views/Generators2.vue'
import MainEngines from '../views/MainEngines.vue'
import EnginesTemperatures from '@/views/MainEnginesTemperatures.vue'
import WaterTanks from '../views/WaterTanks.vue'
import ValveSystem from '@/views/ValveSystem.vue'
import FuelTanks from '../views/FuelTanks.vue'
import OilTanks from '../views/OilTanks.vue'
import Bilges from '../views/Bilges.vue'
import Batteries from '../views/Batteries.vue'
import FireSystem1 from '@/views/FireSystem1.vue'
import FireSystem2 from '@/views/FireSystem2.vue'
import FireSystem3 from '@/views/FireSystem3.vue'
import Doors from '@/views/Doors.vue'
import RefrigerationSystem from '../views/RefrigerationSystem.vue'
import Aux1 from '../views/Aux1.vue'
import Aux2 from '../views/Aux2.vue'
import Pumps from '@/views/Pumps.vue'
import MachineryVentilation from '@/views/MachineryVentilation.vue'
import NavigationLights from '@/views/NavigationLights.vue'
import AcSystem from '@/views/AcSystem.vue'
import NavigationEquipment from '../views/NavigationEquipment.vue'
import Settings from '../views/Settings.vue'
import Alarms from '../views/Alarms.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/singleLine',
      name: 'singleLine',
      component: SingleLine
    },
    {
      path: '/generators',
      name: 'generators',
      component: Generators
    },
    {
      path: '/generators2',
      name: 'generators2',
      component: Generators2
    },
    {
      path: '/valveSystem',
      name: 'valveSystem',
      component: ValveSystem
    },
    {
      path: '/mainEngines',
      name: 'mainEngines',
      component: MainEngines
    },
    {
      path: '/enginesTemperatures',
      name: 'enginesTemperatures',
      component: EnginesTemperatures
    },
    {
      path: '/waterTanks',
      name: 'waterTanks',
      component: WaterTanks
    },
    {
      path: '/fuelTanks',
      name: 'fuelTanks',
      component: FuelTanks
    },
    {
      path: '/oilTanks',
      name: 'oilTanks',
      component: OilTanks
    },
    {
      path: '/bilges',
      name: 'bilges',
      component: Bilges
    },
    {
      path: '/batteries',
      name: 'batteries',
      component: Batteries
    },
    {
      path: '/pumps',
      name: 'pumps',
      component: Pumps
    },
    {
      path: '/fireSystem1',
      name: 'fireSystem1',
      component: FireSystem1
    },
    {
      path: '/fireSystem2',
      name: 'fireSystem2',
      component: FireSystem2
    },
    {
      path: '/fireSystem3',
      name: 'fireSystem3',
      component: FireSystem3
    }
    ,
    {
      path: '/doors',
      name: 'doors',
      component: Doors
    },
    {
      path: '/refrigerationSystem',
      name: 'refrigerationSystem',
      component: RefrigerationSystem
    }
    ,
    {
      path: '/aux1',
      name: 'aux1',
      component: Aux1
    },
    {
      path: '/aux2',
      name: 'aux2',
      component: Aux2
    },
    {
      path: '/machineryVentilation',
      name: 'machineryVentilation',
      component: MachineryVentilation
    },

    {
      path: '/navigationLights',
      name: 'navigationLights',
      component: NavigationLights
    },
    {
      path: '/acSystem',
      name: 'acSystem',
      component: AcSystem
    },

    {
      path: '/navigationEquipment',
      name: 'navigationEquipment',
      component: NavigationEquipment
    },
    {
      path: '/settings',
      name: 'settings',
      component: Settings
    },
    {
      path: '/alarms',
      name: 'alarms',
      component: Alarms
    }
  ]
})

export default router
