cd ./Todos-Ember-Client
npm install
ember build --prod
cp dist/index.html ../app/views/index.php
cp -r dist/assets ../public/assets
