/**
 * Mocking client-server processing
 */
import {images} from './data/images'

export default {
    getWaterfall(callback) {
        setTimeout(() => callback(images), 2000)
    }
}
