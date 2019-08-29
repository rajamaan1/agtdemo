REM Clean up
kubectl delete --all deployments --namespace=andesgt
kubectl delete --all persistentvolumes --namespace=andesgt
kubectl delete --all persistentvolumeclaims --namespace=andesgt
kubectl delete --all ingress --namespace=andesgt
kubectl delete ns andesgt

REM Start and deploy
minikube start --cpus 2 --memory 8192
minikube addons enable ingress
kubectl apply -f namespace.yaml
kubectl apply -f bananas/volumes.yaml
kubectl apply -f bananas/volume-claims.yaml
kubectl apply -f bananas/bananas-deploy.yaml
kubectl apply -f manzanas/volumes.yaml
kubectl apply -f manzanas/volume-claims.yaml
kubectl apply -f manzanas/manzanas-deploy.yaml
kubectl apply -f web/volumes.yaml
kubectl apply -f web/volume-claims.yaml
kubectl apply -f web/web-deploy.yaml
kubectl apply -f ingress-deploy.yaml
