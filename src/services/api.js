const axios = require('axios')
const api = axios.create({
  baseURL: 'https://www.rokugan.fun/'

})

export default api
