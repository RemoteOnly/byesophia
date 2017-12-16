/**
 * Mocking client-server processing
 */
const recommend_items = [
    {'id': 1, 'path': '/img/1.jpg', 'title': '这是图片'},
    {'id': 2, 'path': '/img/1.jpg', 'title': '这是图片'},
    {'id': 3, 'path': '/img/1.jpg', 'title': '这是图片'},
    {'id': 4, 'path': '/img/1.jpg', 'title': '这是图片'},
];

export default {
    getRecommend(callback) {
        setTimeout(() => callback(recommend_items), 2000)
    }
}
