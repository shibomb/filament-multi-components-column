@php
$classNames = $getClassNames();
@endphp

<div class="{{ $classNames }}">
    <x-tables::columns.layout :components="$getComponents()" :record="$getRecord()" :record-key="$recordKey" />
</div>
