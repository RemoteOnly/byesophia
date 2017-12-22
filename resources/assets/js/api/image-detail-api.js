import 'lodash'
import {images} from './data/images'
import {comments} from './data/comments'

export default {
    getImageDetail: function (image_id, with_related_images, callback) {
        let current_image = _.filter(images, function (image) {
            return image.id === image_id;
        })[0];

        // 是否是加载某人的最热的关联图片
        let related_images = [];
        if (with_related_images) {
            for (let i = 1; i <= 3; i++) {
                related_images.push(images[_.random(1, 100)]);
            }
        }

        setTimeout(() => callback(current_image, related_images), 2000)
    },
    getImageComments: function (image_id, page = 1, limit = 20, callback) {
        // 过滤
        let filtered_comments = _.filter(comments, function (comment) {
            return comment.image_id === image_id;
        });

        setTimeout(() => callback(filtered_comments), 2000)
    }
}
