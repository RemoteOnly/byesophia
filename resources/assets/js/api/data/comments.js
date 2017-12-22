let comments = [
    {
        'id': 1,
        'image_id': 1,
        'content': '这是评论啊评论',
        'created_at': '2017-10-10 10:10:10',
        'user': {
            'id': 3,
            'name': '评论人3',
            'avatar': '/img/1.jpg'
        },
        'at_user': null
    },
    {
        'id': 2,
        'image_id': 1,
        'content': '这是评论啊评论',
        'created_at': '2017-10-10 10:10:10',
        'user': {
            'id': 1,
            'name': '评论人3',
            'avatar': '/img/1.jpg'
        },
        'at_user': {
            'id': 3,
            'name': '评论人3',
            'avatar': '/img/1.jpg'
        }
    },
    {
        'id': 3,
        'image_id': 1,
        'content': '这是评论啊评论',
        'created_at': '2017-10-10 10:10:10',
        'user': {
            'id': 2,
            'name': '姓名2',
            'avatar': '/img/1.jpg'
        },
        'at_user': null
    },
];

export {comments}


