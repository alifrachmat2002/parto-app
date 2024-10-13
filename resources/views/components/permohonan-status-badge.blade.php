@props(['status'])

@php
$classes = match (true) {
    str_contains($status, 'Menunggu Diperiksa') => [
        'badgeClasses' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
        'indicatorClasses' => 'bg-yellow-300'
    ],
    str_contains($status, 'Direvisi') => [
        'badgeClasses' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
        'indicatorClasses' => 'bg-red-500'
    ],
    $status === 'Selesai' => [
        'badgeClasses' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
        'indicatorClasses' => 'bg-green-500'
    ],
    default => [
        'badgeClasses' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300', 
        'indicatorClasses' => 'bg-gray-200'
    ]
};

$baseClasses = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium me-2';
$baseIndicatorClasses = 'flex w-2 h-2 me-1 bg-gray-200 rounded-full';
@endphp

<span class="{{ $baseClasses }} {{ $classes['badgeClasses'] }}">
    <span class="{{ $baseIndicatorClasses }} {{ $classes['indicatorClasses'] }}"></span>
    {{ $status }}
</span>
