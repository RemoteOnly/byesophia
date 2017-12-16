/**
 * Mocking client-server processing
 */
const waterfall_items = [];
const sizes = {
    1: {width: 605, height: 605},
    2: {width: 658, height: 1028},
    3: {width: 658, height: 436},
    4: {width: 600, height: 400},
    5: {width: 658, height: 465},
    6: {width: 658, height: 1170},
    7: {width: 658, height: 494},
    8: {width: 428, height: 640},
    9: {width: 658, height: 658},
}

export default {
    getWaterfall(callback) {

        for (let i = 0; i < 400; i++) {
            let img_index = Math.floor(Math.random() * 9 + 1);
            let item = {
                'id': i,
                'path': '/img/' + img_index + '.jpg',
                'title': '这是图片',
                'area': '日本.东京',
                'width': sizes[img_index].width,
                'height': sizes[img_index].height,
                'favor_count': 10,
                'comment_count': 20,
                'created_at': '2017-10-10',
                'user': {'name': '小田', 'following_count': 100}
            };
            waterfall_items.push(item);
        }

        setTimeout(() => callback(waterfall_items), 2000)
    }
}
