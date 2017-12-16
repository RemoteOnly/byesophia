import 'lodash'
import {images} from './data/images'
import {comments} from './data/comments'

export default {
    getImageDetail: function (image_id, callback) {

        setTimeout(() => callback(images[image_id]), 2000)
    },
    getImageComments: function (image_id, page = 1, limit = 20, callback) {
        // 过滤
        let filtered_comments = _.filter(comments, function (comment) {
            return comment.image_id === image_id;
        });

        setTimeout(() => callback(filtered_comments), 2000)
    }
}
