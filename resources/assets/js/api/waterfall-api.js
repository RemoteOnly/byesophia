/**
 * Mocking client-server processing
 */
import {images} from './data/images';
import 'lodash';

export default {
    getWaterfall(page = 1, limit = 20, callback) {
        console.log('加载：', page);
        let paginated_images = _.slice(images, (page - 1) * limit, page * limit);
        console.log('加载到：', paginated_images);
        setTimeout(() => callback(paginated_images), 2000)
    }
}
