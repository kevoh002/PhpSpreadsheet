<?php

return [
    [
        [
            [  7, 10 ],
            [ 15, 22 ],
        ],
        [
            [ 1, 2 ],
            [ 3, 4 ],
        ],
        [
            [ 1, 2 ],
            [ 3, 4 ],
        ],
    ],
    [
        [
            [  30,  36,  42 ],
            [  66,  81,  96 ],
            [ 102, 126, 150 ],
        ],
        [
            [ 1, 2, 3 ],
            [ 4, 5, 6 ],
            [ 7, 8, 9 ],
        ],
        [
            [ 1, 2, 3 ],
            [ 4, 5, 6 ],
            [ 7, 8, 9 ],
        ],
    ],
    [
        [
            [ 10.08, 14.40 ],
            [ 21.60, 31.68 ],
        ],
        [
            [ 1.2, 2.4 ],
            [ 3.6, 4.8 ],
        ],
        [
            [ 1.2, 2.4 ],
            [ 3.6, 4.8 ],
        ],
    ],
    [
        [
            [ 20.48, 30.60 ],
            [ 50.40, 79.88 ],
        ],
        [
            [ 1.2, 3.4 ],
            [ 5.6, 7.8 ],
        ],
        [
            [ 1.2, 3.4 ],
            [ 5.6, 7.8 ],
        ],
    ],
    [
        [
            [  62.00,  49.46 ],
            [ 176.40, 144.50 ],
        ],
        [
            [ 1.2, 2.3, 3.4, 4.5 ],
            [ 5.6, 6.7, 7.8, 8.9 ],
        ],
        [
            [ 9.8, 8.7 ],
            [ 7.6, 6.5 ],
            [ 5.4, 4.3 ],
            [ 3.2, 2.1 ],
        ],
    ],
    // Mismatched dimensions (1x2) and (2x1)
    [
        '#VALUE!',
        [
            [ 1, 2 ],
            [
                3,
                4,
            ],
        ],
        2,
    ],
    // Mismatched dimensions (2x2) and (1x1)
    [
        '#VALUE!',
        [
            [ 1, 2 ],
            [ 3, 4 ],
        ],
        [
            [ 2 ]
        ],
    ],
    // Mismatched dimensions (2x2) and individual cell
    [
        '#VALUE!',
        [
            [ 1, 2 ],
            [ 3, 4 ],
        ],
        [
            2,
        ],
    ],
];
