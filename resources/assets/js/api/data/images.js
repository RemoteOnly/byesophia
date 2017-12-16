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
};

const images = [];

for (let i = 1; i <= 100; i++) {
    let img_index = Math.floor(Math.random() * 9 + 1);
    let item = {
        'id': i,
        'path': '/img/' + img_index + '.jpg',
        'title': '这是图片',
        'area': '日本.东京',
        'description': ` 我们在许多框架中已经看到了一个共同的缺陷是对真正具有响应式文字缺乏支持.
                    页面上的元素流畅地调整大小，
                    但文本仍按固定大小调整大小。为了改善这个问题，对于大量文本的页面
                    我们创建了一个响应文本大小和行高的类，以优化用户的可读性。每行在45-8
                    字符之间，行高在较小的屏幕上更大`,
        'width': sizes[img_index].width,
        'height': sizes[img_index].height,
        'favor_count': 10,
        'comment_count': 20,
        'created_at': '2017-10-10',
        'user': {
            'id': 1,
            'name': '小田',
            'following_count': 100,
            'avatar': '/img/1.jpg'
        }
    };
    images.push(item);
}

export {images}


